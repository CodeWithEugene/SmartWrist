@extends('layouts.master')

@section('title', 'AGI Accessibility')

@section('content')
  <x-page-title title="Accessibility" pagetitle="AGI Wristband" />
  <div class="card rounded-4">
    <div class="card-body">
      <h5 class="fw-bold mb-3">Accessibility Options</h5>
      <ul class="mb-0">
        <li>Haptic alerts for deaf caregivers</li>
        <li>Voice prompts for visually impaired caregivers</li>
        <li>High-contrast UI toggle</li>
      </ul>
    </div>
  </div>
@endsection
