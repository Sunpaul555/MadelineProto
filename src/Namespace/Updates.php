<?php declare(strict_types=1);

/**
 * This file is part of MadelineProto.
 * MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 * You should have received a copy of the GNU General Public License along with MadelineProto.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    Daniil Gentili <daniil@daniil.it>
 * @copyright 2016-2023 Daniil Gentili <daniil@daniil.it>
 * @license   https://opensource.org/licenses/AGPL-3.0 AGPLv3
 * @link https://docs.madelineproto.xyz MadelineProto documentation
 */

/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Updates
{
    /**
     * You cannot use this method directly, see https://docs.madelineproto.xyz for more info on handling updates.
     *
     * @return array
     */
    public function getState();

    /**
     * You cannot use this method directly, see https://docs.madelineproto.xyz for more info on handling updates.
     *
     * @param int $pts             PTS, see [updates](https://core.telegram.org/api/updates).
     * @param int $date            date, see [updates](https://core.telegram.org/api/updates).
     * @param int $qts             QTS, see [updates](https://core.telegram.org/api/updates).
     * @param int $pts_total_limit For fast updating: if provided and `pts + pts_total_limit < remote pts`, [updates.differenceTooLong](https://docs.madelineproto.xyz/API_docs/constructors/updates.differenceTooLong.html) will be returned.<br>Simply tells the server to not return the difference if it is bigger than `pts_total_limit`<br>If the remote pts is too big (&gt; ~4000000), this field will default to 1000000
     *
     *
     * @return array
     */
    public function getDifference(int $pts, int $date, int $qts, int $pts_total_limit = 0);

    /**
     * You cannot use this method directly, see https://docs.madelineproto.xyz for more info on handling updates.
     *
     * @param array $channel The channel @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $filter  Messsage filter @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param int   $pts     Persistent timestamp (see [updates](https://core.telegram.org/api/updates))
     * @param int   $limit   How many updates to fetch, max `100000`<br>Ordinary (non-bot) users are supposed to pass `10-100`
     * @param array $force   Set to true to skip some possibly unneeded updates and reduce server-side load @see https://docs.madelineproto.xyz/API_docs/types/array.html
     *
     *
     * @return array
     */
    public function getChannelDifference(array $channel, array $filter, int $pts, int $limit, array $force = []);
}
