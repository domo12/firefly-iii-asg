<?php

/**
 * AccountType.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace FireflyIII\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * FireflyIII\Models\AccountType
 *
 * @property int                       $id
 * @property Carbon|null               $created_at
 * @property Carbon|null               $updated_at
 * @property string                    $type
 * @property-read Collection|Account[] $accounts
 * @property-read int|null             $accounts_count
 * @method static Builder|AccountType newModelQuery()
 * @method static Builder|AccountType newQuery()
 * @method static Builder|AccountType query()
 * @method static Builder|AccountType whereCreatedAt($value)
 * @method static Builder|AccountType whereId($value)
 * @method static Builder|AccountType whereType($value)
 * @method static Builder|AccountType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class AccountType extends Model
{
    public const ASSET            = 'Asset account';
    public const BENEFICIARY      = 'Beneficiary account';
    public const CASH             = 'Cash account';
    public const CREDITCARD       = 'Credit card';
    public const DEBT             = 'Debt';
    public const DEFAULT          = 'Default account';
    public const EXPENSE          = 'Expense account';
    public const IMPORT           = 'Import account';
    public const INITIAL_BALANCE  = 'Initial balance account';
    public const LIABILITY_CREDIT = 'Liability credit account';
    public const LOAN             = 'Loan';
    public const MORTGAGE         = 'Mortgage';
    public const RECONCILIATION   = 'Reconciliation account';
    public const REVENUE          = 'Revenue account';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts
        = [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    /** @var array Fields that can be filled */
    protected $fillable = ['type'];

    /**
     * @return HasMany
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }
}
