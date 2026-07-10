@props(['hover' => true])

<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table' . ($hover ? ' table--hover' : '') . ' table--align-middle']) }}>
        {{ $slot }}
    </table>
</div>