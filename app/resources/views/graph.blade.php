<div id="chart" style="height:300px; width:100%;"></div>

@section('scripts')
<script src="https://unpkg.com/frappe-charts@1.6.0/dist/frappe-charts.min.iife.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    new frappe.Chart("#chart", {
        title: "IELTS スコア",
        data: {
            labels: ["2月","4月","6月","8月","10月","12月"],
            datasets: [
                { title: "Reading", color: "light-blue", values: [5,5.5,6,5.5,5.5,6.5] },
                { title: "Writing", color: "orange", values: [6,6.5,6,6,6.5,7] }
            ]
        },
        type: "bar",
        height: 250
    });
});
</script>
@endsection
