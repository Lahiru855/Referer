<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $company->name }}</p>
</div>

<!-- Address Address Field -->
<div class="form-group">
    {!! Form::label('address_address', 'Address Address:') !!}
    <p>{{ $company->address_address }}</p>
</div>

<!-- Address Latitude Field -->
<div class="form-group">
    {!! Form::label('address_latitude', 'Address Latitude:') !!}
    <p>{{ $company->address_latitude }}</p>
</div>

<!-- Address Longitude Field -->
<div class="form-group">
    {!! Form::label('address_longitude', 'Address Longitude:') !!}
    <p>{{ $company->address_longitude }}</p>
</div>

