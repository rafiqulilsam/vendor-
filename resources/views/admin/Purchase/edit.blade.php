@extends('admin.master')
@section('content')
<ul class="bardump">
    <li class="bardump-item">
        <a href="{{ route('admin.purchase.index') }}" target="_blank"
            rel="noopener noreferrer">purchase</a>
    </li>

</ul>


<div class="container">

    <form title="purchase Create" :action="route('admin.purchase.update',['purchase'=>$purchase->id])">

        <div class="input-group is-half">
            <label>Title</label>
            <input name="title" value="{{ old('title')??$purchase->title }}"
                class="input @error('title') is-invalid @enderror">
            @error('title')
                <small>
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="input-group  is-half">
            <label>Category</label>
            <select name="category_id" value="{{ old('category_id')??$purchase->category_id }}"
                class="input @error('category_id') is-invalid @enderror">
                <option value="">Select Category</option>
                @foreach($categories as $t)
                    <option value="{{ $t->id }}" @if($purchase->category_id == $t->id) selected @endif>
                        {{ $t->title }}

                    </option>
                @endforeach
            </select>
            @error('rule')
                <small>
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="input-group  is-half">
            <label>Unit</label>
            <select name="unit_id" value="{{ old('unit_id')??$purchase->unit_id }}"
                class="input @error('unit_id') is-invalid @enderror">
                <option value="">Select Unit</option>
                @foreach($units as $t)
                    <option value="{{ $t->id }}" @if ($purchase->unit_id == $t->id) selected @endif>{{ $t->title }}
                    </option>
                @endforeach
            </select>
            @error('unit_id')
                <small>
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="input-group is-half">
            <label>rate</label>
            <input name="rate" value="{{ old('rate') }}"
                class="input @error('rate') is-invalid @enderror">
            @error('rate')
                <small>
                    {{ $message }}
                </small>
            @enderror
        </div>



        <div class="input-group is-half">
            <label>description</label>
            <input name="description" value="{{ old('description')??$purchase->description }}"
                class="input @error('description') is-invalid @enderror">
            @error('description')
                <small>
                    {{ $message }}
                </small>
            @enderror
        </div>


        <div class="input-group is-half">
            <label>quantity</label>
            <input name="quantity" type="number" value="{{ old('quantity') }}"
                class="input @error('quantity') is-invalid @enderror">
            @error('quantity')
                <small>
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="input-group is-half">
            <label>selling_price</label>
            <input name="selling_price" type="number"
                value="{{ old('selling_price')??$purchase->rate }}"
                class="input @error('selling_price') is-invalid @enderror">
            @error('selling_price')
                <small>
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="input-group  is-half">
            <label>Warehouse</label>
            <select name="warehouse_id" value="{{ old('warehouse_id') }}"
                class="input @error('warehouse_id') is-invalid @enderror">
                <option value="">Select Warehouse</option>
                @foreach($warehouses as $t)
                    <option value="{{ $t->id }}">{{ $t->title }}</option>
                @endforeach
            </select>
            @error('warehouse_id')
                <small>
                    {{ $message }}
                </small>
            @enderror
        </div>






    </form>

</div>
@endsection


