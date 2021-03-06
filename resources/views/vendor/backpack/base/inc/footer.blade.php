@if (config('backpack.base.show_powered_by') || config('backpack.base.developer_link'))
    <div class="text-muted ml-auto mr-auto">
        <strong>
            @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
                {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
            @endif
            @if (config('backpack.base.show_powered_by'))
                {{ trans('backpack::base.powered_by') }} <a target="_blank" href="http://unilab.iliauni.edu.ge/">UniLab</a>.
            @endif
        </strong>
    </div>
@endif
