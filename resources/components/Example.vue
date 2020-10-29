<template>
	<div>
		<ul>
			<li v-for="item in items" v-text="item">
				<!-- <slot>DEFAULT</slot> -->
				<!-- <slot :item="item">{{ item }}</slot> -->
				<slot name="menu-item" things="foo" bar="baz">{{ item }}</slot>
			</li>
		</ul>
	</div>
</template>

<script>
	export default {
		props: ['items']
	}
</script>