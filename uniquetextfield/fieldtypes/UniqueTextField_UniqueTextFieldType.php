<?php
namespace Craft;

/**
 * Unique Text Field
 */
class UniqueTextField_UniqueTextFieldType extends PlainTextFieldType
{
    /**
     * Field label
     * 
     * @return string
     */
    public function getName()
    {
        return Craft::t('Unique Text Field');
    }

    /**
     * Checks if another entry exists with the given value
     * 
     * @param  string $value The value to check
     * @return bool
     */
    private function valueExists($value)
    {
        $existing = craft()->elements->getCriteria($this->element->elementType)->first(array(
            $this->model->getAttribute('handle') => $value
        ));

        return ($existing && $existing->getAttribute('id') != $this->element->getAttribute('id'));
    }

    /**
     * Validates the field values is unique
     *
     * @param mixed $value
     * @return true|string|array
     */
    public function validate($value)
    {
        return ($this->valueExists($value)) ? $this->model->getAttribute('name') . ' ' . Craft::t('must be unique') : true;
    }
}