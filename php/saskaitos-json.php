<?php
	
	$rows = array();
	
	for ($i = 1; $i < 20; $i++) {
		
		$rows[] = array(
			'date' => date('Y-m-d'),
			'name' => 'SASK-0001',
			'term' => date('Y-m-d'),
			'sum' => $i.',00',
			'payer' => 'Vardenis pavardenis Ilga pavardė',
			'preview_link' => '<a class="icon-button" href="/"><i class="fa fa-search-plus" aria-hidden="true"></i></a>',
			'pay_link' => '<a class="icon-button" href="/"><i class="fa fa-credit-card" aria-hidden="true"></i></a>'
		);
		
	}
	
	$data = array(
		'records' => 10000,
		'page' =>	1,
		'total' => '50000',
		'rows' => $rows
	);
	
echo $_GET['callback']?>(<?php echo json_encode($data)?>)
