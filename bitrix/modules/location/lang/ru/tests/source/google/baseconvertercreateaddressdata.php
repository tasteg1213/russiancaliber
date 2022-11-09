<?php

use Bitrix\Main\Loader;
use Bitrix\Main\SystemException;
use Bitrix\Location\Entity\Address\FieldType;

if(!Loader::includeModule('location'))
{
	throw new SystemException('Can\'t include module location');
}

return array(
	array(
		array(
			FieldType::COUNTRY => '������',
			FieldType::ADM_LEVEL_2 => '������',
			FieldType::ADM_LEVEL_3 => '��������',
			FieldType::LOCALITY => '������',
			FieldType::SUB_LOCALITY_LEVEL_1 => '����������� ���������������� �����',
			FieldType::STREET => '�������� �����',
			FieldType::BUILDING => '16',
			FieldType::ADDRESS_LINE_1 => '�������� �����, 16',
			//FieldType::ADDRESS_LINE_2 => '�� "������� �����"',
			FieldType::POSTAL_CODE => '125009'
		),

		array (
			0 =>
				array (
					'long_name' => '�� "������� �����"',
					'short_name' => '�� "������� �����"',
					'types' =>
						array (
							0 => 'premise',
						),
				),
			1 =>
				array (
					'long_name' => '16',
					'short_name' => '16',
					'types' =>
						array (
							0 => 'street_number',
						),
				),
			2 =>
				array (
					'long_name' => '�������� �����',
					'short_name' => '�������� ��.',
					'types' =>
						array (
							0 => 'route',
						),
				),
			3 =>
				array (
					'long_name' => '����������� ���������������� �����',
					'short_name' => '����������� ���������������� �����',
					'types' =>
						array (
							0 => 'sublocality_level_1',
							1 => 'sublocality',
							2 => 'political',
						),
				),
			4 =>
				array (
					'long_name' => '������',
					'short_name' => '������',
					'types' =>
						array (
							0 => 'locality',
							1 => 'political',
						),
				),
			5 =>
				array (
					'long_name' => '��������',
					'short_name' => '��������',
					'types' =>
						array (
							0 => 'administrative_area_level_3',
							1 => 'political',
						),
				),
			6 =>
				array (
					'long_name' => '������',
					'short_name' => '������',
					'types' =>
						array (
							0 => 'administrative_area_level_2',
							1 => 'political',
						),
				),
			7 =>
				array (
					'long_name' => '������',
					'short_name' => 'RU',
					'types' =>
						array (
							0 => 'country',
							1 => 'political',
						),
				),
			8 =>
				array (
					'long_name' => '125009',
					'short_name' => '125009',
					'types' =>
						array (
							0 => 'postal_code',
						),
				),
		)
	)
);