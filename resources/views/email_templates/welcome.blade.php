<x-mail::message>
# Welcome to PixeSage
Hi {{$user->name}},

Welcome to PixeSage

<x-mail::button :url="url('')">
Go to PixeSage
</x-mail::button>

Thanks,<br>
 PixeSage
</x-mail::message>
