<?php
/**
 * AttributeDescription.php
 *
 * @copyright  2023 beikeshop.com - All Rights Reserved
 * @link       https://beikeshop.com
 * @author     TL <mengwb@guangda.work>
 * @created    2023-01-03 20:22:18
 * @modified   2023-01-03 20:22:18
 */

namespace Beike\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AttributeDescription extends Base
{
    use HasFactory;

    protected $fillable = ['attribute_id', 'locale', 'name'];

}

