<div class="row">
  <div class="col-md-6"></div>
  <div class="col-md-6">
    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <select id="filter_company_id" name="company_id" class="custom-select">
            @foreach ($companies as $id => $name)
              <option {{ $id == request('company_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
            @endforeach
          </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>