<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_address', 'Address Address:') !!}
    {!! Form::text('address_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_latitude', 'Address Latitude:') !!}
    {!! Form::number('address_latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_longitude', 'Address Longitude:') !!}
    {!! Form::number('address_longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('companies.index') }}" class="btn btn-default">Cancel</a>
</div>
