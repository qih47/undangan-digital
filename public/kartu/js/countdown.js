(function () {
  const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

  const targetDate = new Date("2025-06-28T15:00:00").getTime();

  const x = setInterval(function () {
    const now = new Date().getTime(),
      distance = targetDate - now;

    if (distance > 0) {
      document.getElementById("days").innerText = Math.floor(distance / day);
      document.getElementById("hours").innerText = Math.floor(
        (distance % day) / hour
      );
      document.getElementById("minutes").innerText = Math.floor(
        (distance % hour) / minute
      );
      document.getElementById("seconds").innerText = Math.floor(
        (distance % minute) / second
      );
    } else {
      document.getElementById("countdown").style.display = "none";
      document.getElementById("wedding-running").style.display = "block";
      document.getElementById("wedding-done").style.display = "block";
      clearInterval(x);
    }
  }, 1000);
})();
