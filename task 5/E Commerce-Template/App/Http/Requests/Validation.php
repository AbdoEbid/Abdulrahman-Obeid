<?php

namespace App\Http\Requests;

class Validation
{
    private $value;
    private $valueName;
    private array $errors = [];

    public function required(): self
    {
        if (empty($this->value)) {
            $this->errors[$this->valueName][__FUNCTION__] = "{$this->valueName} Is Required";
        }
        return $this;
    }
    public function max(int $max): self
    {
        if (strlen($this->value > $max)) {
            $this->errors[$this->valueName][__FUNCTION__] = "{$this->valueName} Is supposed to be less than {$max} characters";
        }
        return $this;
    }
    public function mini(int $mini): self
    {
        if (strlen($this->value < $mini)) {
            $this->errors[$this->valueName][__FUNCTION__] = "{$this->valueName} Is supposed to be greater than {$mini} characters";
        }
        return $this;
    }
    public function confirmed($confirmValue)
    {
        if ($this->value != $confirmValue) {
            $this->errors[$this->valueName][__FUNCTION__] = "{$this->valueName} not Confirmed";
        }
        return $this;
    }
    public function regex(string $pattern,$invalidMessage = null ): self
    {
        if (!preg_match($pattern, $this->value)) {
            $this->errors[$this->valueName][__FUNCTION__] = $invalidMessage ?? "{$this->valueName} Invalid";
        }
        return $this;
    }
    public function in(array $values)
    {
        if (!in_array($this->value, $values)) {
            $this->errors[$this->valueName][__FUNCTION__] = "{$this->valueName} Is supposed to be" . implode($values);
        }
        return $this;
    }
    public function string()
    {
        if (!is_string($this->value)) {
            $this->errors[$this->valueName][__FUNCTION__] = "{$this->valueName} Is supposed to be a String";
        }
        return $this;
    }
    public function unique()
    {
    }
    public function exist()
    {
    }

    /**
     * Set the value of value
     *
     * @return  self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Set the value of valueName
     *
     * @return  self
     */
    public function setValueName($valueName)
    {
        $this->valueName = $valueName;

        return $this;
    }

    /**
     * Get the value of errors
     */
    public function getErrors()
    {
        return $this->errors;
    }

    public function getError(string $error)
    {
        if (isset($this->errors[$error])) {
            foreach ($this->errors[$error] AS $error) {
                return $error;
            }
        }
        return null;
    }
    public function getMessage(string $error): ?string
    {
        return $this->getError($error) !== NULL ?
            "<p class='text-danger font-weight-bold'>" . $this->getError($error) . "</p>" : NULL;
    }
}
