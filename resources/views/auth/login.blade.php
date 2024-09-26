<x-layout>
    <x-page-heading>Login</x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <div class="text-center">
            <x-forms.button>Log In</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>