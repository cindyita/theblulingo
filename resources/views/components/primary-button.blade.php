<button 
  {{ $attributes->merge([
    'type' => 'submit',
    'class' => '
      inline-flex items-center justify-center
      px-5 py-2.5
      bg-[#d27ef2] 
      dark:bg-[#a74ec7]
      border border-transparent 
      rounded-[25px] 
      font-semibold 
      text-sm 
      text-white 
      uppercase tracking-wide 
      hover:bg-[#c665e6] 
      dark:hover:bg-[#973dbc]
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
