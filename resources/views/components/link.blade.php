<a href="{{ $href }}" 
   class="{{ $attributes->merge([
      'class' => 'inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'
   ]) }}">
   <x-button>
       {{ $slot }}
   </x-button>
</a>
