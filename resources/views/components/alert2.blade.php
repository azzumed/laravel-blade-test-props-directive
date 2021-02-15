@props(['type' => 'info'])

<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    alert2
</div>
