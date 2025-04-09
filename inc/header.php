<!-- Hidden checkbox for sidebar toggle -->
<input type="checkbox" id="checkbox" hidden />

<header class="header glass-header">
	<h2 class="u-name">
		Pro <b>Tasker</b>
		<label for="checkbox" class="nav-toggle">
			<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
		</label>
	</h2>

	<span class="notification" id="notificationBtn">
		<i class="fa fa-bell bell-icon" aria-hidden="true"></i>
		<span id="notificationNum" class="notif-count"></span>
	</span>
</header>

<div class="notification-bar glass-dropdown" id="notificationBar">
	<ul id="notifications"></ul>
</div>

<script>
	let openNotification = false;
	const notification = () => {
		const notificationBar = document.querySelector("#notificationBar");
		notificationBar.classList.toggle('open-notification');
		openNotification = !openNotification;
	};

	document.querySelector("#notificationBtn").addEventListener("click", notification);
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous"></script>
<script>
	$(document).ready(function () {
		$("#notificationNum").load("app/notification-count.php");
		$("#notifications").load("app/notification.php");
	});
</script>
