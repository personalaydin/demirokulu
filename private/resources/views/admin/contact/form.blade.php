@include('admin.template.components.form.text', [
    'name' => 'first_name',
    'label' => 'Ad',
    'disabled' => true,
])

@include('admin.template.components.form.text', [
    'name' => 'last_name',
    'label' => 'Soyad',
    'disabled' => true,
])

@include('admin.template.components.form.text', [
    'name' => 'email',
    'type' => 'email',
    'label' => 'E-posta Adresi',
    'disabled' => true,
])

@include('admin.template.components.form.textarea', [
    'name' => 'message',
    'label' => 'Mesaj',
    'disabled' => true,
])