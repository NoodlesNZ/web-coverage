<?php
$coverage->stop();

$writer = new \SebastianBergmann\CodeCoverage\Report\PHP;
$writer->process($coverage, '/tmp/cov/' . date('U') . '.cov');
