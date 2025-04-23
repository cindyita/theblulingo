@props(['disabled' => false])

<input 
  @disabled($disabled) 
  {{ $attributes->merge([
    'class' => '
      border-[#d27ef2]
      dark:border-[#b166cc]
      bg-white 
      dark:bg-[#2d103a] 
      text-gray-800 
      dark:text-gray-100 
      focus:border-[#d27ef2] 
      focus:ring-[#d27ef2]
      dark:focus:border-[#d27ef2] 
      dark:focus:ring-[#d27ef2] 
      rounded-xl 
      shadow-md
      transition 
      duration-200 
      ease-in-out
    ']) 
  }}
>

