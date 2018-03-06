<?php
/* ===========================================================================
 * Copyright 2018 The Opis Project
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================================ */

namespace OpisColibri\UsersSQLImpl;

use Opis\Colibri\Collector as AbstractCollector;
use Opis\Colibri\ItemCollectors\ContractCollector;
use OpisColibri\Users\IUserRepository;
use OpisColibri\Users\IUserSession;
use OpisColibri\Users\Security\IPasswordRepository;

class Collector extends AbstractCollector
{
    /**
     * @param ContractCollector $contract
     */
    public function contracts(ContractCollector $contract)
    {
        $contract->singleton(IUserSession::class, UserSession::class);
        $contract->singleton(IUserRepository::class, UserRepository::class);
        $contract->singleton(IPasswordRepository::class, PasswordRepository::class);
    }
}