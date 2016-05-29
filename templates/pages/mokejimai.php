<div class="layout-default">

	<article class="site-article">
		
		<h1 class="site-article-title">Mokėjimai</h1>
		
		<!-- We support more than 40 localizations -->
		<script type="text/ecmascript" src="/js/jqgrid/js/i18n/grid.locale-lt.js"></script>
		
		<!-- This is the Javascript file of jqGrid -->   
		<script type="text/ecmascript" src="/js/jqgrid/js/jquery.jqGrid.min.js"></script>
		
		<!-- The link to the CSS that the grid needs -->
		<link rel="stylesheet" type="text/css" media="screen" href="/js/jqgrid/css/ui.jqgrid.css" />

		<table id="jqGrid"></table>
		<div id="jqGridPager"></div>

		<script type="text/javascript"> 
			$(document).ready(function () {
				$("#jqGrid").jqGrid({
					url: '/php/mokejimai-json.php',
					mtype: "GET",
					datatype: "jsonp",
					colModel: [
						{ label: 'Data', name: 'date', key: true, width: 95, align: 'center' },
						{ label: 'Sąskaitos numeris', name: 'name', width: 110, align: 'center' },
						{ label: 'Aprašymas', name: 'desc', width: 180, align: 'left'},
						{ label: 'Suma', name: 'sum', width: 65, align: 'right' },
						{ label: 'Mokėtojas', name: 'payer', width: 165, align: 'left' },
						{ label: 'Numeris', name: 'no', width: 70, align: 'center' },
					],
					viewrecords: true,
					width: 690,
					height: 365,
					rowNum: 20,
					pager: "#jqGridPager"
				});
			});
	 
	   </script>

	</article>
	
</div>