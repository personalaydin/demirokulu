<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RedirectOldURLS
{
    /**
     * Handle an incoming request.
     *
     * @param Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $requestPath = $request->path();
        $redirection = config('redirection');
        $redirectPath = isset($redirection[$requestPath]) ? $redirection[$requestPath] : null;

        // Redirect external URLS
        if (Str::startsWith($requestPath, 'http')) {
            $targetURL = trim($requestPath, '/');
            return redirect()->to($targetURL, config('app.debug') == true ? 302 : 301);
        }

        // General redirection
        if (isset($redirectPath) && $requestPath !== $redirectPath) {
            return $this->redirect($redirectPath);
        }

        // Redirect all remaining mobile traffics
        if (Str::startsWith($requestPath, 'mobile')) {
            return $this->redirect(Str::replaceFirst('mobile', '', $requestPath));
        }

        // Redirect all remaining feel-good-stories traffics
        if (Str::startsWith($requestPath, 'feel-good-stories')) {
            $sourcePath = trim(Str::replaceFirst('feel-good-stories', '', $requestPath), '/');
            $targetURL = sprintf('https://blog.hillsidebeachclub.com/%s/', $sourcePath);

            return redirect()->to($targetURL, config('app.debug') == true ? 302 : 301);
        }

        return $next($request);
    }

    /**
     * @param $redirectPath
     * @return RedirectResponse
     */
    public function redirect($redirectPath) {
        $redirectPath = trim($redirectPath, '/');

        return redirect()->to(config('app.url').'/'.$redirectPath, config('app.debug') == true ? 302 : 301);
    }
}