<?php

namespace Gayly\Leaf\Grid\Filter;

class Like extends AbstractFilter
{

	public function condition($inputs)
    {
        $value = array_get($inputs, $this->column);

        if (is_array($value)) {
            $value = array_filter($value);
        }

        if (is_null($value) || empty($value)) {
            return;
        }

        $this->value = $value;

        return $this->buildCondition($this->column, 'like', "%{$this->value}%");
    }
}
