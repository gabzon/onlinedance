@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-input rounded-md shadow-sm
focus:ring-blue-700 focus:border-blue-600 dark:focus:ring-red-700 dark:focus:border-red-600']) !!}>