<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{asset('logo.png')}}" alt="">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <b><x-jet-label for="" value="Add employee" /></b> 
            <div>
           
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('national_id') }}" />
                <x-jet-input id="national_id" class="block mt-1 w-full" type="text" name="national_id" :value="old('national_id')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('email')" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" equired autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('specialization') }}" />
                <x-jet-input id="specialization" class="block mt-1 w-full" type="text" name="specialization" :value="old('specialization')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('work_at') }}" />
                <x-jet-input id="work_at" class="block mt-1 w-full" type="text" name="work_at" :value="old('work_at')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Address') }}" />
                <x-jet-input id="work_at" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Phone number') }}" />
                <x-jet-input id="work_at" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('is_admin') }}" />
                <x-jet-input id="is_admin" class="block mt-1 w-half" type="text" name="is_admin" :value="old('is_admin')" required />
            </div>

          

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <x-jet-button class="ml-4">
                    {{ __('Add') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
