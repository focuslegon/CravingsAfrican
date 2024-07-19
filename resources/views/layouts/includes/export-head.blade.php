
<style>
body {
    font-family: Arial, sans-serif;
     font-size: 12px; /* Adjust as needed */
}

.table-container {
    max-width: 100%;
    margin-bottom: 5px;
}

th, td {
    word-wrap: break-word;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 5px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 5px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.company-header {
    text-align: center;
    margin-bottom: 20px;
}

.company-logo {
    max-width: 100px;
    max-height: 100px;
}

    </style>

<div style="text-align: center;">
    @if (!isset($export))
    <img src="{{ asset(settings('logo')) }}" class="company-logo" alt="" style="margin: auto;" />
    @else
    <img src="{{ public_path(settings('logo')) }}" class="company-logo" alt=""/>
    @endif
    <h1>{{settings('app_name')}}</h1>
    <p class="title- mb-15">Email: {{settings('email')}}</p>
    <p class="title- mb-15">Date Exported: {{date_time_format(date('Y M D'))}}</p>

        @if (isset($title)&&$title)
        <h2>{{$title}}</h2>
        @endif
</div>
