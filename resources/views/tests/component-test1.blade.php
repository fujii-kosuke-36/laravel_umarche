<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
コンポーネントテスト１

    <x-tests.card title="タイトル" content="本文1" :message="$message" />
    <x-tests.card title="タイトル2" />
    <x-tests.card title="CSSを変更したい" class="bg-green-500" />
</x-tests.app>