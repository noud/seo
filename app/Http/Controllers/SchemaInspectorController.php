<?php

namespace App\Http\Controllers;


use App\Events\MyEvent;
use Dfba\Schema\Schema; // Very crucial line
use Illuminate\Routing\Controller as BaseController;

class SchemaInspectorController extends BaseController
{
	public function test(Schema $schema) {
		// --------------^ HERE

		// Some demo code:
		echo "<b>". $schema->getName() ."</b><br>";

		foreach ($schema->getTables() as $table) {
			echo "__ <b>". $table->getName() ."</b><br>";

			foreach ($table->getColumns() as $column) {
				echo "__ __ <b>". 
					$column->getName() ."</b><br>";

				echo "__ __ __ <i>dataType:</i> ".
					$column->getDataType() ."<br>";
				echo "__ __ __ <i>unsigned:</i> ".
					$column->getUnsigned() ."<br>";
				echo "__ __ __ <i>zerofill:</i> ".
					$column->getZerofill() ."<br>";
				echo "__ __ __ <i>nullable:</i> ".
					$column->getNullable() ."<br>";
				echo "__ __ __ <i>defaultValue:</i> ".
					$column->getDefaultValue() ."<br>";
				echo "__ __ __ <i>options:</i> ".
					implode(', ', $column->getOptions() ?: []) ."<br>";
				echo "__ __ __ <i>autoIncrement:</i> ".
					$column->getAutoIncrement() ."<br>";
				echo "__ __ __ <i>maximumLength:</i> ".
					$column->getMaximumLength() ."<br>";
				echo "__ __ __ <i>minimumValue:</i> ".
					$column->getMinimumValue() ."<br>";
				echo "__ __ __ <i>maximumValue:</i> ".
					$column->getMaximumValue() ."<br>";
				echo "__ __ __ <i>precision:</i> ".
					$column->getPrecision() ."<br>";
				echo "__ __ __ <i>scale:</i> ".
					$column->getScale() ."<br>";
				echo "__ __ __ <i>characterSet:</i> ".
					$column->getCharacterSet() ."<br>";
				echo "__ __ __ <i>collation:</i> ".
					$column->getCollation() ."<br>";
				echo "__ __ __ <i>comment:</i> ".
					$column->getComment() ."<br>";
			}
		}
	}
}
