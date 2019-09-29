<?php

namespace App\Http\Controllers;


use App\Events\MyEvent;
use Dfba\Schema\Schema; // Very crucial line
use Illuminate\Routing\Controller as BaseController;

class SchemaInspectorController extends BaseController
{
	public function schema(Schema $schema) {
		$schemaJsonArray = [
			'database' => [
				'name' => $schema->getName(),
			],
			'ui' => [
				"database" => [
					"showModal" => false,
					"edit" => false
				],

				"table" => [
					"showModal" => false,
					"edit" => false,
					"editData" => [
						"id" => "",
						"name" => "",
						"softDelete" => false,
						"timeStamp" => true
					]
				],
				"column" => [
					"showModal" => false,
					"edit" => false,
					"editData" => [
						"id" => "",
						"name" => "",
						"type" => "integer",
						"length" => "",
						"defValue" => "",
						"comment" => "",
						"autoInc" => false,
						"nullable" => false,
						"unique" => false,
						"index" => false,
						"unsigned" => false,
						"foreignKey" => [
							"references" => [
								"id" => "",
								"name" => ""
							],
							"on" => [
								"id" => "",
								"name" => ""
							]
						]
					],
					"tableId" => ""
				],
			]
		];
		$x = $y = 0;
		foreach ($schema->getTables() as $table) {
			$tableId = substr(uniqid(rand(10000,99999)),0,6);
			$schemaJsonArray['ui']['positions'][$tableId][] = [
				'x' => $x,
				'y' => $y,
			];
			$schemaJsonArray['tables'][] = [
				'id' => $tableId,
				'name' => $table->getName(),
				"color" => "table-header-green",
				"softDelete" => false,
				'timeStamp' => true,
			];
			foreach ($table->getColumns() as $column) {
				if (!in_array($column->getName(), ['created_at', 'updated_at'])) {
					$columnId = substr(uniqid(rand(10000,99999)),0,6);
					$schemaJsonArray['columns'][$tableId][]= [
						'id' => $columnId,
						'name' => $column->getName(),
						"foreignKey" => [
							"references" => [
								"id" => "",
								"name" => ""
							],
							"on" => [
								"id" => "",
								"name" => ""
							]
						]
					];
				}
			}
			$x += 10;
			$y += 10;
		}
		$schemaJsonArray['relations'] = [];
		echo json_encode($schemaJsonArray, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
	}

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
