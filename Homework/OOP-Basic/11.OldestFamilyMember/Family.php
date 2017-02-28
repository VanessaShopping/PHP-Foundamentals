<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:40 AM
 */

namespace FamilyMembers;
class Family
{
    /**
     * @var Person[]
     */
    private $members = [];
    /**
     * @var Person
     */
    private $oldestMember = null;

    public function addMember(Person $member)
    {
        $this->members[] = $member;
        if ($this->oldestMember == null ||
            $member->getAge() > $this->oldestMember->getAge()
        ) {
            $this->oldestMember = $member;
        }
    }

    public function getOldestMember(): Person
    {
        return $this->oldestMember;
    }
}