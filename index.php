<?php
	$editPage = false;
	$admin = true;
	$numberOfCourses = 3;
	$pageTitle = 'Мои курсы'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="icon" href="img/logo-icon.png">
	<title>Simple</title>
</head>

<body>
<header class="header_wrapper">
	<div class="row">
		<div class="col-2 left_side">
			<div class="left_wrapper">
				<img
					class="logo"
					src="img/logo.png"
					alt="logo"
				>
			</div>
		</div>
		<div class="col-8 center">
			<div class="button_wrapper">
				<div class="button_rectangular">
					<img class="icon" src="./img/main.png" alt="main">
					<div class="text">Мои курсы</div>
				</div>
				<div class="button_rectangular">
					<img class="icon" src="./img/files.png" alt="main">
					<div class="text">База знаний</div>
				</div>
				<div class="button_rectangular">
					<img class="icon" src="./img/calendar.png" alt="main">
					<div class="text">Мои события</div>
				</div>
			</div>
		</div>
		<div class="col-2 right_side">
			<div class="right_wrapper">
				<div class="user_notification_item">
					<img src="./img/message.png" alt="message">
				</div>
				<div class="user_notification_item">
					<img src="./img/notification.png" alt="notification">
				</div>
				<div>
					<img class="avatar" src="./img/avatar.svg" alt="avatar">
				</div>
			</div>
		</div>
	</div>
</header>
<main>
	<div class="cover">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="page_title_wrapper">
						<div class="page_title">
							<?php echo $pageTitle ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="control_panel_wrapper">
		<div class="container control_panel">
			<div class="courses_available">
				<?php
				echo 'Доступно'.' '.$numberOfCourses
				?>
			</div>
			<?php if($admin): ?>
				<button class="add_course_btn">
					<?php if($editPage == false): ?>
						<div>Редактировать</div>
					<?php else: ?>
						<div>Перейти к курсам</div>
					<?php endif?>
				</button>
			<?php endif ?>
		</div>
	</div>
	<div class="main-wrapper">
		<div class="container">
			<div class="row">
				<?php if($editPage): ?>
					<div class="col-6 course_item_wrapper ">
						<div class="new_course_creator">
							<div class="course_creator_img_wrap">
								<img src="../img/add_icon_l.png" alt="" class="new_course_creator_img">
								<div>Добавить новый курс</div>
							</div>
						</div>
					</div>
				<?php endif ?>
				<div class="col-6 course_item_wrapper">
					<router-link class="router">
						<div class="course_item">
							<div class="course_img_wrapper">
								<img src="./img/courses.png" alt="course_cover" class="course_cover">
							</div>
							<div class="course_text_wrapper">
								<div>Business English. Базовый курс</div>
								<div class="lessons_available">
									1 урок
								</div>
							</div>
						</div>
					</router-link>
					<?php if($editPage): ?>
						<div class="content_btn">
							<img src="./img/edit.png" alt="" class="content_icon">
							<img src="./img/delete.png" alt="" class="content_icon">
						</div>
					<?php endif ?>
				</div>
				<div class="col-6 course_item_wrapper">
					<router-link class="router">
						<div class="course_item">
							<div class="course_img_wrapper">
								<img src="./img/courses.png" alt="course_cover" class="course_cover">
							</div>
							<div class="course_text_wrapper">
								<div>Excel. Базовый курс</div>
								<div class="lessons_available">
									9 уроков
								</div>
							</div>
						</div>
					</router-link>
					<?php if($editPage): ?>
						<div class="content_btn">
							<img src="./img/edit.png" alt="" class="content_icon">
							<img src="./img/delete.png" alt="" class="content_icon">
						</div>
					<?php endif ?>
				</div>
				<div class="col-6 course_item_wrapper">
					<router-link class="router">
						<div class="course_item">
							<div class="course_img_wrapper">
								<img src="./img/courses.png" alt="course_cover" class="course_cover">
							</div>
							<div class="course_text_wrapper">
								<div>PowerPoint. Базовый курс</div>
								<div class="lessons_available">
									Уроков еще нет
								</div>
							</div>
						</div>
					</router-link>
					<?php if($editPage): ?>
						<div class="content_btn">
							<img src="./img/edit.png" alt="" class="content_icon">
							<img src="./img/delete.png" alt="" class="content_icon">
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</main>
<footer class="footer">
	<div class="container">
		<div class="row center">
			<div class="col-12 logo">
				<a href="#">
				<img src="./img/logo.png" alt="logo" class="logo_img"/>
				</a>
			</div>
		</div>
	</div>
</footer>
</body>
</html>