<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company Register') }}
        </h2>
    </x-slot>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="POST" action="{{ route('tenant.store') }}">
                @csrf
        
                <!-- Name -->
                <div>
                    <x-input-label for="company" :value="__('Company Name')" />
                    <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" autofocus autocomplete="company" />
                    <x-input-error :messages="$errors->get('company')" class="mt-2" />
                </div>
       
                <div class="mt-4">
                 <x-input-label for="domain" :value="__('Company Domain')" />
                 <div class="input-group mb-3">
                      <input type="text" id="domain" name="domain" class="form-control" placeholder="Company Domain" :value="old('domain')"  aria-describedby="basic-addon2">
                      <span class="input-group-text" id="basic-addon2"> . {{config('tenancy.central_domains')[1]}}</span>
                    </div>
                 <x-input-error :messages="$errors->get('domain')" class="mt-2" />
             </div>
       
             <div>
                 <x-input-label for="name" :value="__('Owner Name')" />
                 <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" />
                 <x-input-error :messages="$errors->get('name')" class="mt-2" />
             </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
        
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                     autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation"  autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
         
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
     </div>
    </x-app-layout>
 