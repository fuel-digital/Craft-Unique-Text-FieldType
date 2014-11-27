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
            $this->model->handle => $value
        ));

        return ($existing && $existing->id != $this->element->id);
    }

    /**
     * Validates the field values is unique
     *
     * @param mixed $value
     * @return true|string
     */
    public function validate($value)
    {
        return ($this->valueExists($value)) ? Craft::t('{label} already exists', array(
            'label' => $this->model->name
        )) : true;
    }
}