<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        h = checkTime(h);
        m = checkTime(m);
        document.getElementById('topbar-clock').innerHTML = h + ":" + m;
        setTimeout(startTime, 1000);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i}  // add zero in front of numbers < 10
        return i;
    }
    window.onload = startTime;
</script>
