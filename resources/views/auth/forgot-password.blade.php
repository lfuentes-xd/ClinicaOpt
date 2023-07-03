<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Ha olvidado su contraseña? No se preocupe. Indíquenos su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-between my-4">
            <x-link :href="route('register')">
                ¿Nuevo usuario?
            </x-link> <!-- aca se manda a llamar el componente de forogot password-->

            <x-link :href="route('password.request')">
                ¿Olvidaste tu contraseña?
            </x-link>
        </div>
    </form>
    <x-primary-button>
        {{ __('recuperar contraseña') }}
    </x-primary-button>
</x-guest-layout>
