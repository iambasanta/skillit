@props(['value'])
<div class="mt-4">

    <input id="description" value="{{ $value }}" type="hidden" name="description" >

    <trix-editor input="description" class="form-textarea rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></trix-editor>

</div>

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('trix/trix.css') }}">
@endpush

@push('scripts')
  <script type="text/javascript" src="{{ asset('trix/trix.js') }}"></script>
@endpush
