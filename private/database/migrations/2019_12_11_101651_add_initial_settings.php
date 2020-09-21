<?php

use Illuminate\Database\Migrations\Migration;

class AddInitialSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        setting()->set('title_tr', 'DemirOkulu ');
        setting()->set('meta_description_tr', 'DemirOkulu ');

        setting()->set('title_en', 'DemirOkulu ');
        setting()->set('meta_description_en', 'DemirOkulu ');

        setting()->set('email', 'info@Demirkkulu.com.tr');

        setting()->set('social_linkedin', 'https://linkedin.com/company/DemirOkulu-a-s');
        setting()->set('social_instagram', 'https://www.instagram.com/DemirOkuluwearable/?hl=en');
        setting()->set('social_facebook', 'https://facebook.com/DemirOkulu.wearable');
        setting()->set('social_youtube', 'https://www.youtube.com/channel/UCIPr7NOMxkwg-c3a1c5FogQ');
        setting()->set('blog_url', 'Blog');

        setting()->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
