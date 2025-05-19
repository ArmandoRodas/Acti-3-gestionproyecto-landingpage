@extends('layouts.app')

@section('content')
  {{-- Hero Section --}}
  <section class="hero-section py-6 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold mb-4">Transform your workflow with FakeProduct</h1>
          <p class="lead mb-4">
            Streamline your process, boost productivity, and achieve more with our innovative solution.
          </p>
          <a href="#" class="btn btn-primary btn-lg me-3">Start Free Trial</a>
          <a href="#" class="btn btn-outline-secondary btn-lg">Watch Demo</a>
        </div>
        <div class="col-lg-6">
          <div class="bg-white p-5 text-center rounded shadow">
            <p class="text-muted">Hero Image Placeholder</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Features Section --}}
  <section id="features" class="py-5">
    <div class="container">
      <div class="row g-4">
        @foreach($features as $feature)
          <div class="col-md-4 text-center">
            <div class="feature-icon mx-auto mb-3 bg-primary text-white rounded p-3">
              <i class="bi {{ $feature->icon_class }} fs-2"></i>
            </div>
            <h3>{{ $feature->title }}</h3>
            <p class="text-muted">{{ $feature->description }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Pricing Section --}}
  <section id="pricing" class="py-5 bg-light">
    <div class="container">
      <div class="row g-4">
        @foreach($plans as $plan)
          <div class="col-md-4">
            <div class="card h-100 {{ $loop->first ? 'border-primary' : '' }}">
              <div class="card-body text-center">
                <h5 class="card-title">{{ $plan->name }}</h5>
                <h2 class="card-price">${{ $plan->price }}<small class="text-muted">/mo</small></h2>
                <ul class="list-unstyled mt-4 text-start">
                  <li>
                    <i class="bi bi-check-circle text-primary me-2"></i>
                    Up to {{ $plan->max_users ?? 'Unlimited' }} users
                  </li>
                  <li>
                    <i class="bi bi-check-circle text-primary me-2"></i>
                    {{ $plan->storage }} storage
                  </li>
                </ul>
                <button class="btn {{ $loop->first ? 'btn-primary' : 'btn-outline-primary' }} w-100 mt-4">
                  Get Started
                </button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Testimonials Section --}}
  <section id="testimonials" class="py-5">
    <div class="container">
      <div class="row g-4">
        @foreach($testimonials as $t)
          <div class="col-md-4">
            <div class="card h-100 text-center">
              <img src="{{ $t->photo_url }}" alt="{{ $t->name }}" class="testimonial-img mx-auto mt-4">
              <div class="card-body">
                <p class="card-text">"{{ $t->quote }}"</p>
                <h5 class="card-title mb-1">{{ $t->name }}</h5>
                <p class="text-muted">{{ $t->role }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
