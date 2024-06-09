<x-mail::message>


    {{-- Intro Lines --}}
    @foreach ($introLines as $line)
        {{ $line }}
    @endforeach



    {{-- Subcopy --}}
    @isset($actionText)
        <x-slot:subcopy>
            @lang('', [
                'actionText' => $actionText,
            ]) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
        </x-slot:subcopy>
    @endisset
</x-mail::message>
