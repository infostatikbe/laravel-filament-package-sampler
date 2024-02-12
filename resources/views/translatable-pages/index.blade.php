@php
    /* @var \App\models\TranslatablePage $page */
@endphp

<x-layouts.base title="{{ $page->title }}" wide="true">
    <header>
        <x-language-switch/>
    </header>

    <main class="prose-headings:font-base">
        <x-flexible-hero :page="$page" />

        <div class="prose content">
            <x-flexible-content-blocks :page="$page"/>
        </div>
    </main>
</x-layouts.base>
