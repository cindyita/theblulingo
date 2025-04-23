<button 
  {{ $attributes->merge([
    'type' => 'submit',
    'class' => '
      inline-flex items-center justify-center
      px-5 py-2.5
      bg-red-600 
      dark:bg-red-600
      border border-transparent 
      rounded-[25px] 
      font-semibold 
      text-sm 
      text-white 
      uppercase tracking-wide 
      hover:bg-red-700 
      dark:hover:bg-red-700
      focus:outline-none 
      focus:ring-2 
      focus:ring-[#d27ef2] 
      focus:ring-offset-2 
      dark:focus:ring-offset-gray-900 
      transition 
      ease-in-out 
      duration-150
    '
  ]) }}>
  {{ $slot }}
</button>
