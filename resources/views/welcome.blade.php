<!DOCTYPE html>
<html>
<head>
	<meta name="base" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
<div id="app">
	<meni-list :items="['one, 'tow, 'three']">
		{{-- <h5>override</h5> --}}
		<template scope="{ bar }">
			<h2 v-text="bar"></h2>
		</template>
	</meni-list>
</div>
</body>
</html>