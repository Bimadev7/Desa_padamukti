@extends('layouts.main')
@section('content')

<div class="col-md-6" >
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Budget</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="inputEstimatedBudget">Estimated budget</label>
          <input type="number" id="inputEstimatedBudget" class="form-control" value="2300" step="1">
        </div>
        <div class="form-group">
          <label for="inputSpentBudget">Total amount spent</label>
          <input type="number" id="inputSpentBudget" class="form-control" value="2000" step="1">
        </div>
        <div class="form-group">
          <label for="inputEstimatedDuration">Estimated project duration</label>
          <input type="number" id="inputEstimatedDuration" class="form-control" value="20" step="0.1">
        </div>
      </div>
@endsection


@section('content')

<div class="col-md-6" >
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Budget</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="inputEstimatedBudget">Estimated budget</label>
          <input type="number" id="inputEstimatedBudget" class="form-control" value="2300" step="1">
        </div>
        <div class="form-group">
          <label for="inputSpentBudget">Total amount spent</label>
          <input type="number" id="inputSpentBudget" class="form-control" value="2000" step="1">
        </div>
        <div class="form-group">
          <label for="inputEstimatedDuration">Estimated project duration</label>
          <input type="number" id="inputEstimatedDuration" class="form-control" value="20" step="0.1">
        </div>
      </div>
@endsection
