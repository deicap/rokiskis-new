<?php
	
	$rows = array();
	
	for ($i = 1; $i < 20; $i++) {
		
		$rows[] = array(
			'date' => date('Y-m-d'),
			'name' => 'SASK-0001',
			'desc' => 'Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum',
			'sum' => $i.',00',
			'payer' => 'Vardenis pavardenis',
			'no' => '44590'
		);
		
	}
	
	$data = array(
		'records' => 10000,
		'page' =>	1,
		'total' => '50000',
		'rows' => $rows
	);
	
echo $_GET['callback']?>(<?php echo json_encode($data)?>)
