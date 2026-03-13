@extends('adminlte::page')

@section('title', 'My Profile')
@section('page-title', 'My Profile')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')

<div class="row">
    <!-- Profile Header Card -->
    <div class="col-md-4">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <!-- Avatar -->
                    <img class="profile-user-img img-fluid img-circle elevation-3"
                         src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('dist/img/user2-160x160.jpg') }}"
                         alt="{{ $user->name }}"
                         style="width: 120px; height: 120px; object-fit: cover; border: 4px solid var(--sp-accent);">
                </div>

                <h3 class="profile-username text-center mt-3">{{ $user->name }}</h3>
                
                <p class="text-muted text-center">
                    <span class="badge badge-{{ $user->role === 'admin' ? 'danger' : ($user->role === 'manager' ? 'info' : 'success') }} px-3 py-2">
                        {{ ucfirst($user->role) }}
                    </span>
                </p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item d-flex justify-content-between">
                        <span><i class="fas fa-id-card text-muted mr-2"></i> Employee ID</span>
                        <strong>{{ $user->employee_id ?? 'N/A' }}</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><i class="fas fa-building text-muted mr-2"></i> Department</span>
                        <strong>{{ $user->department ?? 'N/A' }}</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><i class="fas fa-briefcase text-muted mr-2"></i> Position</span>
                        <strong>{{ $user->position ?? 'N/A' }}</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><i class="fas fa-phone text-muted mr-2"></i> Phone</span>
                        <strong>{{ $user->phone ?? 'N/A' }}</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><i class="fas fa-envelope text-muted mr-2"></i> Email</span>
                        <strong>{{ $user->email }}</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><i class="fas fa-calendar text-muted mr-2"></i> Joined</span>
                        <strong>{{ $user->created_at?->format('M d, Y') ?? 'N/A' }}</strong>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block">
                    <i class="fas fa-edit mr-2"></i> Edit Profile
                </a>
            </div>
        </div>

        <!-- Attendance Summary Card -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-2"></i> This Month Summary
                </h3>
            </div>
            <div class="card-body">                
                <div class="row text-center">
                    <div class="col-6 mb-3">
                        <div class="text-success">
                            <i class="fas fa-check-circle fa-2x mb-2"></i>
                            <div class="h4 mb-0">{{ $monthStats->present ?? 0 }}</div>
                            <small class="text-muted">Present</small>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="text-warning">
                            <i class="fas fa-clock fa-2x mb-2"></i>
                            <div class="h4 mb-0">25</div>
                            <small class="text-muted">Late</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-info">
                            <i class="fas fa-plane-departure fa-2x mb-2"></i>
                            <div class="h4 mb-0">5</div>
                            <small class="text-muted">Leave</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-primary">
                            <i class="fas fa-stopwatch fa-2x mb-2"></i>
                            <div class="h4 mb-0">6h</div>
                            <small class="text-muted">Hours</small>
                        </div>
                    </div>
                </div>
                
                <!-- Progress Bar -->
                <div class="mt-3">
                    <small class="text-muted">Attendance Rate</small>
                    <div class="progress progress-sm">25
                        <div class="progress-bar bg-success" 
                             role="progressbar" 
                             style="width: 5%" 
                             aria-valuenow="5" 
                             aria-valuemin="0" 
                             aria-valuemax="100">
                            5%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Details -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-pills" id="profileTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="details-tab" data-toggle="pill" href="#details" role="tab">
                            <i class="fas fa-user mr-2"></i> Personal Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab">
                            <i class="fas fa-shield-alt mr-2"></i> Security
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="preferences-tab" data-toggle="pill" href="#preferences" role="tab">
                            <i class="fas fa-cog mr-2"></i> Preferences
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="activity-tab" data-toggle="pill" href="#activity" role="tab">
                            <i class="fas fa-history mr-2"></i> Activity
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="card-body">
                <div class="tab-content" id="profileTabContent">
                    
                    <!-- Personal Details Tab -->
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                                    <small class="text-muted">To change email, contact administrator</small>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Employee ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $user->employee_id ?? 'Not assigned' }}" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Department</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $user->department ?? 'Not assigned' }}" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $user->position ?? 'Not assigned' }}" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" value="{{ $user->phone ?? 'Not provided' }}" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Account Created</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $user->created_at?->format('F d, Y \a\t h:i A') ?? 'N/A' }}" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last Login</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ $user->last_login?->diffForHumans() ?? 'First login' }}" disabled>
                                </div>
                            </div>
                            
                            <div class="border-top pt-3 mt-3">
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-edit mr-2"></i> Edit Personal Information
                                </a>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Security Tab -->
                    <div class="tab-pane fade" id="security" role="tabpanel">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle mr-2"></i>
                            Keep your account secure by using a strong, unique password.
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password Status</label>
                            <div class="col-sm-9">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-success mr-3">
                                        <i class="fas fa-check mr-1"></i> Active
                                    </span>
                                    <small class="text-muted">Last changed: {{ $user->password_changed_at?->diffForHumans() ?? 'Never' }}</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Two-Factor Auth</label>
                            <div class="col-sm-9">
                                <span class="badge badge-warning">
                                    <i class="fas fa-exclamation-triangle mr-1"></i> Not Enabled
                                </span>
                                <small class="text-muted d-block mt-1">Add an extra layer of security to your account</small>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Active Sessions</label>
                            <div class="col-sm-9">
                                <span class="badge badge-info">1 Device</span>
                                <small class="text-muted d-block mt-1">Current session • {{ request()->ip() }}</small>
                            </div>
                        </div>
                        
                        <div class="border-top pt-3 mt-3">
                            <a href="{{ route('profile.password') }}" class="btn btn-warning">
                                <i class="fas fa-key mr-2"></i> Change Password
                            </a>
                            <button class="btn btn-outline-secondary ml-2" disabled>
                                <i class="fas fa-mobile-alt mr-2"></i> Enable 2FA (Coming Soon)
                            </button>
                        </div>
                    </div>
                    
                    <!-- Preferences Tab -->
                    <div class="tab-pane fade" id="preferences" role="tabpanel">
                        <form action="{{ route('profile.preferences.update') }}" method="POST">
                            @csrf
                            @method('POST')
                            
                            <h5 class="mb-3">Display Settings</h5>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Theme</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="theme">
                                        <option value="light" {{ (auth()->user()->preferences['theme'] ?? 'light') === 'light' ? 'selected' : '' }}>Light Mode</option>
                                        <option value="dark" {{ (auth()->user()->preferences['theme'] ?? 'light') === 'dark' ? 'selected' : '' }}>Dark Mode</option>
                                        <option value="auto" {{ (auth()->user()->preferences['theme'] ?? 'light') === 'auto' ? 'selected' : '' }}>Auto (System)</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Language</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="language">
                                        <option value="en" {{ (auth()->user()->preferences['language'] ?? 'en') === 'en' ? 'selected' : '' }}>English</option>
                                        <option value="bn" {{ (auth()->user()->preferences['language'] ?? 'en') === 'bn' ? 'selected' : '' }}>বাংলা (Bengali)</option>
                                    </select>
                                </div>
                            </div>
                            
                            <h5 class="mb-3 mt-4">Notification Settings</h5>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Notifications</label>
                                <div class="col-sm-9">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" 
                                               id="emailNotifications" 
                                               name="email_notifications"
                                               {{ (auth()->user()->preferences['email_notifications'] ?? true) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="emailNotifications">
                                            Receive attendance & leave updates via email
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">SMS Notifications</label>
                                <div class="col-sm-9">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" 
                                               id="smsNotifications" 
                                               name="sms_notifications"
                                               {{ (auth()->user()->preferences['sms_notifications'] ?? false) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="smsNotifications">
                                            Receive important alerts via SMS
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Attendance Reminder</label>
                                <div class="col-sm-9">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" 
                                               id="attendanceReminder" 
                                               name="attendance_reminder"
                                               {{ (auth()->user()->preferences['attendance_reminder'] ?? true) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="attendanceReminder">
                                            Send reminder if not checked out by 6 PM
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border-top pt-3 mt-3">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save mr-2"></i> Save Preferences
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Activity Tab -->
                    <div class="tab-pane fade" id="activity" role="tabpanel">
                        <div class="timeline">
                            @php
                                $activities = collect([
                                    ['action' => 'Logged in', 'time' => now()->subMinutes(5), 'icon' => 'sign-in-alt', 'color' => 'success'],
                                    ['action' => 'Checked out', 'time' => now()->subHours(8), 'icon' => 'sign-out-alt', 'color' => 'danger'],
                                    ['action' => 'Checked in', 'time' => now()->subHours(8)->subMinutes(30), 'icon' => 'clock', 'color' => 'primary'],
                                    ['action' => 'Updated profile', 'time' => now()->subDays(2), 'icon' => 'user-edit', 'color' => 'info'],
                                    ['action' => 'Applied for leave', 'time' => now()->subDays(5), 'icon' => 'calendar-plus', 'color' => 'warning'],
                                ]);
                            @endphp
                            
                            @foreach($activities as $activity)
                            <div>
                                <i class="fas fa-{{ $activity['icon'] }} bg-{{ $activity['color'] }}"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock"></i> {{ $activity['time']->diffForHumans() }}</span>
                                    <h3 class="timeline-header">
                                        <a href="#">{{ $activity['action'] }}</a>
                                    </h3>
                                    <div class="timeline-body text-muted">
                                        Activity recorded in SmartPresence system
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            <div>
                                <i class="fas fa-clock bg-gray"></i>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-outline-primary">
                                <i class="fas fa-list mr-2"></i> View Full Attendance History
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Initialize Select2 for preferences dropdowns
    $(document).ready(function() {
        $('.select2').select2({
            theme: 'bootstrap4',
            width: '100%'
        });
        
        // Tab persistence using localStorage
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get('tab');
        if (tab) {
            $('#profileTabs a[href="#' + tab + '"]').tab('show');
        }
        
        // Save active tab to URL when changed
        $('#profileTabs a').on('shown.bs.tab', function (e) {
            const tabId = $(e.target).attr('href').replace('#', '');
            const url = new URL(window.location);
            url.searchParams.set('tab', tabId);
            window.history.replaceState({}, '', url);
        });
    });
</script>
@endpush