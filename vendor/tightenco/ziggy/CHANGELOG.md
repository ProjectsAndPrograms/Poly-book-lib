# Changelog

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html), and the format of this changelog is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

Breaking changes are marked with ⚠️.

## [Unreleased]

## [v2.4.2] - 2025-01-02

**Fixed**

- Fix deprecated implictly nullable parameter by @datlechin in https://github.com/tighten/ziggy/pull/792

## [v2.4.1] - 2024-11-21

**Fixed**

- Fix `qs` type dependencies

## [v2.4.0] - 2024-11-09

**Added**

- Add ability to strictly type check route names by @bakerkretzmar and @Andyuu in https://github.com/tighten/ziggy/pull/787

**Fixed**

- Fix type definition for route() with only options by @bram-pkg in https://github.com/tighten/ziggy/pull/786
- Fix `queryParams` return type by @bakerkretzmar in https://github.com/tighten/ziggy/pull/788

**Changed**

- Add note to use inject for vue 3 by @mhelaiwa in https://github.com/tighten/ziggy/pull/785
- Update `README.md`. by @choowx in https://github.com/tighten/ziggy/pull/782

## [v2.3.1] - 2024-10-17

**Fixed**

- Escape special regex characters when matching routes by @aguingand in https://github.com/tighten/ziggy/pull/766
- Fix params sometimes being double-decoded by @bakerkretzmar in https://github.com/tighten/ziggy/pull/778

**Changed**

- Optimize has() by @thomas-brx in https://github.com/tighten/ziggy/pull/770

## [v2.3.0] - 2024-07-21

**Added**

- Add ability to acess only the query params or the actual route params by @peter-emad99 in https://github.com/tighten/ziggy/pull/744

**Changed**

- Pest by @bakerkretzmar in https://github.com/tighten/ziggy/pull/756
- Laravel route change by @hasanablak in https://github.com/tighten/ziggy/pull/763
- Modernize some PHP syntax by @bakerkretzmar in https://github.com/tighten/ziggy/pull/757

## [v2.2.1] - 2024-05-16

**Fixed**

- Fix double slashes with domain params by @bakerkretzmar in https://github.com/tighten/ziggy/pull/754

## [v2.2.0] - 2024-05-16

**Added**

- Support Laravel Folio by @bakerkretzmar in https://github.com/tighten/ziggy/pull/733

**Fixed**

- Fix route().params type by @peter-emad99 in https://github.com/tighten/ziggy/pull/743

## [v2.1.0] - 2024-03-26

**Added**

- Improve generated types to include optional types by @alexmccabe in https://github.com/tighten/ziggy/pull/697

**Fixed**

- Fix Vue plugin on Vue 2 by @bakerkretzmar in https://github.com/tighten/ziggy/pull/738

## [v2.0.5] - 2024-03-19

**Fixed**

- Export the types file by @simon-tma in https://github.com/tighten/ziggy/pull/721

## [v2.0.4] - 2024-03-05

**Fixed**

- Fix event listener propagation by @bakerkretzmar in https://github.com/tighten/ziggy/pull/724

## [v2.0.3] - 2024-02-20

**Fixed**

- Add Vue plugin and React hook types by @bakerkretzmar in https://github.com/tighten/ziggy/pull/715

## [v2.0.2] - 2024-02-20

**Fixed**

- Fix package.json module and exports by @bakerkretzmar in https://github.com/tighten/ziggy/pull/714

## [v2.0.1] - 2024-02-20

**Fixed**

- Remove default export from type declarations by @bakerkretzmar in https://github.com/tighten/ziggy/pull/713

## [v2.0.0] - 2024-02-20

See [UPGRADING](UPGRADING.md#upgrading-from-1x-to-2x) for detailed upgrade instructions.

**Changed**

- Changed PHP package namespace from `Tightenco\Ziggy` to `Tighten\Ziggy`.
- Updated JavaScript package to only provide named exports.
- Moved Vue and React integrations to root of JavaScript module.
- Updated builds to only use ES Modules.
- Updated minimum dependency versions to Laravel 9 and PHP 8.1.

**Removed**

- Made `makeDirectory` method of `CommandRouteGenerator` class private.
- Removed deprecated JavaScript `check()` method.

## [v1.8.2] - 2024-02-20

**Added**

- Test on Laravel 11 by @shuvroroy in https://github.com/tighten/ziggy/pull/709

**Fixed**

- Fix `route().current()` with encoded characters by @bakerkretzmar in https://github.com/tighten/ziggy/pull/668
- Fix retrieving ziggys config from an api endpoint link in readme by @RomainMazB in https://github.com/tighten/ziggy/pull/694
- Fix `route().current()` with nested/object query params by @bakerkretzmar in https://github.com/tighten/ziggy/pull/712

**Changed**

- Enable provenance for npm package by @saibotk in https://github.com/tighten/ziggy/pull/684
- Handle generated file extensions more robustly by @bakerkretzmar in https://github.com/tighten/ziggy/pull/687

## [v1.8.1] - 2023-10-12

**Fixed**

- Update: Correction of some spellings and articles in the Readme file. by @prince-noman in https://github.com/tighten/ziggy/pull/678
- Fix `route().current()` with encoded characters by @bakerkretzmar in https://github.com/tighten/ziggy/pull/668

**Changed**

- Update Readme, formatting, and testing setup by @bakerkretzmar in https://github.com/tighten/ziggy/pull/675

## [v1.8.0] - 2023-10-06

**Added**

- Add type declarations and `ziggy.d.ts` generation by @lmeysel and @bakerkretzmar in https://github.com/tighten/ziggy/pull/664

## [v1.7.0] - 2023-10-04

**Added**

- Add `useRoute()` React hook by @bakerkretzmar in https://github.com/tighten/ziggy/pull/473

**Fixed**

- URL-encode fewer special characters inside in route parameters by @bakerkretzmar in https://github.com/tighten/ziggy/pull/662
- Fix empty root URL with `absolute: false` by @bakerkretzmar in https://github.com/tighten/ziggy/pull/667

## [v1.6.2] - 2023-08-18

**Fixed**

- Make slash "not encoding" less restrictive by @aguingand in https://github.com/tighten/ziggy/pull/661

## [v1.6.1] - 2023-08-04

**Fixed**

- Fix numeric route names by @bakerkretzmar https://github.com/tighten/ziggy/pull/658

## [v1.6.0] - 2023-05-12

**Added**

- Add `'ziggy.output.path'` config option by @mhelaiwa https://github.com/tighten/ziggy/pull/633

## [v1.5.2] - 2023-05-05

**Added**

- Add Vite instructions to README.md by @fullstackfool https://github.com/tighten/ziggy/pull/627

**Fixed**

- Trim slashes between origin and optional first param by @bakerkretzmar in https://github.com/tighten/ziggy/pull/637
- Fix `route().params` not being decoded by @Tofandel in https://github.com/tighten/ziggy/pull/610

## [v1.5.1] - 2023-04-22

**Fixed**

- Check for overridden `getKeyName()` and `$primaryKey` by @Jared0430 in https://github.com/tighten/ziggy/pull/630

## [v1.5.0] - 2022-09-23

**Added**

- Add support for negating route filter patterns with `!` by @bakerkretzmar in https://github.com/tighten/ziggy/pull/559

**Changed**

- Test on PHP 8.2 by @bakerkretzmar in https://github.com/tighten/ziggy/pull/584

**Fixed**

- Allow `null` as entire params argument by @bakerkretzmar in https://github.com/tighten/ziggy/pull/582

## [v1.4.6] - 2022-04-08

**Fixed**

- Use global regex instead of `replaceAll` for better browser support by @bakerkretzmar in https://github.com/tighten/ziggy/pulls/548

## [v1.4.5] - 2022-03-25

**Fixed**

- Remove dead code by @Tofandel in https://github.com/tighten/ziggy/pull/525
- Fix `route().current()` with 'wheres' that include regex start/end anchors by @bakerkretzmar in https://github.com/tighten/ziggy/pull/535
- Fix inherited custom route key name detection by @bakerkretzmar in https://github.com/tighten/ziggy/pull/540

## [v1.4.4] - 2022-03-11

**Added**

- Allow custom output via formatters by @jaulz in https://github.com/tighten/ziggy/pull/483
- Add Vue 3 `provide`/`inject` support to the Vue plugin by @c-fitzmaurice in https://github.com/tighten/ziggy/pull/518

**Fixed**

- Encode non-slash characters in wildcard last parameter by @rodrigopedra in https://github.com/tighten/ziggy/pull/507
- Update JS route matching to take 'wheres' into account by @Tofandel in https://github.com/tighten/ziggy/pull/514

## [v1.4.3] - 2022-01-28

**Added**

- Test on PHP 8.1 by @bakerkretzmar in https://github.com/tighten/ziggy/pull/484
- Don't encode slashes in wildcard last parameter by @bakerkretzmar in https://github.com/tighten/ziggy/pull/500

**Fixed**

- Ignore route action parameters without URI segments by @jaulz in https://github.com/tighten/ziggy/pull/482

## [v1.4.2] - 2021-10-01

**Fixed**

- Fix `route().current()` matching route names with multiple periods ([#466](https://github.com/tighten/ziggy/pull/466))

## [v1.4.1] - 2021-09-24

**Fixed**

- Fix `undefined` error if there's no global `Ziggy` variable ([#462](https://github.com/tighten/ziggy/pull/462))
- Fix payload caching for Octane ([#460](https://github.com/tighten/ziggy/pull/460))

## [v1.4.0] - 2021-08-25

**Added**

- Add support for parameters inside single route segments ([#444](https://github.com/tighten/ziggy/pull/444))

## [v1.3.6] - 2021-08-25

**Fixed**

- Fix nested object query params ([#451](https://github.com/tighten/ziggy/pull/451))

## [v1.3.5] - 2021-07-20

**Fixed**

- Fix route model binding with abstract class ([#445](https://github.com/tighten/ziggy/pull/445))

## [v1.3.4] - 2021-07-06

**Fixed**

- Fix property mangling and implement ES5 compatibility ([#442](https://github.com/tighten/ziggy/pull/442))

## [v1.3.3] - 2021-07-02

**Fixed**

- Revert ([d781b16](https://github.com/tighten/ziggy/commit/d781b164b8f455730fe8a8b0cbf91f0f8cb55a73))

## [v1.3.2] - 2021-07-01

**Fixed**

- Remove Babel preset to correctly transpile to ES5 by default ([d781b16](https://github.com/tighten/ziggy/commit/d781b164b8f455730fe8a8b0cbf91f0f8cb55a73))

## [v1.3.1] - 2021-06-19

**Changed**

- Use `Object.assign()` to merge routes ([#429](https://github.com/tighten/ziggy/pull/429))

## [v1.3.0] - 2021-06-17

**Added**

- Make `location` configurable (adds better support for SSR) ([#432](https://github.com/tighten/ziggy/pull/432))

## [v1.2.0] - 2021-05-24

**Added**

- Add Vue plugins ([#407](https://github.com/tighten/ziggy/pull/407), [#424](https://github.com/tighten/ziggy/pull/424))

## [v1.1.0] - 2021-04-02

**Added**

- Prepare for Laravel Octane ([#415](https://github.com/tighten/ziggy/pull/415))

## [v1.0.5] - 2021-02-05

**Added**

- Add support for appending 'extra' parameters to the query string ([#390](https://github.com/tighten/ziggy/pull/390))

**Changed**

- Remove source maps ([#395](https://github.com/tighten/ziggy/pull/395))

**Fixed**

- Use Laravel's `Reflector` class to get model parameter class name ([#396](https://github.com/tighten/ziggy/pull/396))

## [v1.0.4] - 2020-12-06

**Fixed**

- Fix bug where `route().current()` could incorrectly return `true` on URLs with no parameters ([#377](https://github.com/tighten/ziggy/pull/377))
- Fix several other bugs in `route().current()` with params ([#379](https://github.com/tighten/ziggy/pull/379))
- Revert [#334](https://github.com/tighten/ziggy/pull/334), default Ziggy's `url` back to `url('/')` instead of the `APP_URL` environment variable ([#386](https://github.com/tighten/ziggy/pull/386))

## [v1.0.3] - 2020-11-20

**Fixed**

- Filter out unnamed cached routes with randomly generated names ([#370](https://github.com/tighten/ziggy/pull/370))
- Fix collision with JavaScript built-in method names like `shift` by casting empty `defaults` to an object ([#371](https://github.com/tighten/ziggy/pull/371))

## [v1.0.2] - 2020-11-13

**Fixed**

- Make `ziggy:generate` URL behaviour consistent with Ziggy class and Blade directive ([#361](https://github.com/tighten/ziggy/pull/361))
- Fix `route().current()` error on unknown/unnamed routes ([#362](https://github.com/tighten/ziggy/pull/362))

## [v1.0.1] - 2020-11-10

**Fixed**

- Fix `route().current()` on routes at the domain root ([#356](https://github.com/tighten/ziggy/pull/356))

## [v1.0.0] - 2020-11-06

**Added**

- Document the `check()` method ([#294](https://github.com/tighten/ziggy/pull/294)) and how to install and use Ziggy via `npm` and over a CDN ([#299](https://github.com/tighten/ziggy/pull/299))
- Add support for [custom scoped route model binding](https://laravel.com/docs/7.x/routing#implicit-binding), e.g. `/users/{user}/posts/{post:slug}` ([#307](https://github.com/tighten/ziggy/pull/307))
- Add support for [implicit route model binding](https://laravel.com/docs/7.x/routing#implicit-binding) ([#315](https://github.com/tighten/ziggy/pull/315))
- Add support for passing parameters to `current()` to check against the current URL in addition to the route name ([#330](https://github.com/tighten/ziggy/pull/330))

**Changed**

- ⚠️ Update `ziggy:generate` output path for Laravel 5.7+ `resources` directory structure, thanks [@Somethingideally](https://github.com/Somethingideally)! ([#269](https://github.com/tighten/ziggy/pull/269))
- ⚠️ Update automatic `id` parameter detection to check for higher priority named route parameters and allow passing `id` as a query parameter ([#301](https://github.com/tighten/ziggy/pull/301))
- ⚠️ Rename the `RoutePayload` class to `Ziggy` and remove its `compile` method in favour of constructing a new instance and calling `->toArray()` or `->toJson()` ([#305](https://github.com/tighten/ziggy/pull/305))
    - Resolve the application router instance internally instead of passing it into the constructor – `new Ziggy(...)` now takes only 2 arguments, `$group` and `$url`
    - Change the default value of `basePort` from `false` to `null`
    - Remove the `getRoutePayload()` methods on the `BladeRouteGenerator` and `CommandRouteGenerator` classes
- ⚠️ Rename all `whitelist` and `blacklist` functionality to `only` and `except` ([#300](https://github.com/tighten/ziggy/pull/300))
- Use Jest instead of Mocha for JS tests ([#309](https://github.com/tighten/ziggy/pull/309))
- Use [microbundle](https://github.com/developit/microbundle) instead of Webpack to build and distribute Ziggy ([#312](https://github.com/tighten/ziggy/pull/312))
- ⚠️ Default Ziggy's `baseUrl` to the value of the `APP_URL` environment variable instead of `url('/')` ([#334](https://github.com/tighten/ziggy/pull/334))
- ⚠️ Return a literal string from the `route()` function when any arguments are passed to it ([#336](https://github.com/tighten/ziggy/pull/336))
- ⚠️ Rename `namedRoutes` → `routes`, `defaultParameters` → `defaults`, `baseUrl` → `url`, and `basePort` → `port` ([#338](https://github.com/tighten/ziggy/pull/338))
- ⚠️ Make the `filter()` method on the `Ziggy` class return an instance of that class instead of a collection of routes ([#341](https://github.com/tighten/ziggy/pull/341))
- ⚠️ Make the `nameKeyedRoutes()`, `resolveBindings()`, `applyFilters()`, and `group()` methods on the `Ziggy` class, and the `generate()` method on the `CommandRouteGenerator` class, private ([#341](https://github.com/tighten/ziggy/pull/341))
- ⚠️ Export from `index.js` instead of `route.js` ([#344](https://github.com/tighten/ziggy/pull/344))
- ⚠️ Encode boolean query parameters as integers ([#345](https://github.com/tighten/ziggy/pull/345))
- ⚠️ Ensure `.current()` respects the value of the `absolute` option ([#353](https://github.com/tighten/ziggy/pull/353))

**Deprecated**

- Deprecate the `with()` and `check()` methods ([#330](https://github.com/tighten/ziggy/pull/330))

**Removed**

- ⚠️ Remove `Route` Facade macros `Route::only()` and `Route::except()` (previously `Route::whitelist()` and `Route::blacklist()`) ([#306](https://github.com/tighten/ziggy/pull/306))
- ⚠️ Remove the following undocumented public properties and methods from the `Router` class returned by the `route()` function ([#330](https://github.com/tighten/ziggy/pull/330)):
    - `name`, `absolute`, `ziggy`, `urlBuilder`, `template`, `urlParams`, `queryParams`, and `hydrated`
    - `normalizeParams()`, `hydrateUrl()`, `matchUrl()`, `constructQuery()`, `extractParams()`, `parse()`, and `trimParam()`
- ⚠️ Remove the `UrlBuilder` class ([#330](https://github.com/tighten/ziggy/pull/330))
- ⚠️ Remove the `url()` method now that `route(...)` returns a string ([#336](https://github.com/tighten/ziggy/pull/336))
- ⚠️ Remove the `baseDomain` and `baseProtocol` properties on the Ziggy config object ([#337](https://github.com/tighten/ziggy/pull/337))
- ⚠️ Remove the `appendRouteToList()`, `isListedAs()`, `except()`, and `only()` methods from the `Ziggy` class ([#341](https://github.com/tighten/ziggy/pull/341))

**Fixed**

- Fix automatic `id` parameter detection by also excluding routes with an _optional_ `id` parameter (`{id?}`), thanks [@Livijn](https://github.com/Livijn)! ([#263](https://github.com/tighten/ziggy/pull/263))
- Fix port not being added to URL for routes with subdomains ([#293](https://github.com/tighten/ziggy/pull/293))
- Fix getting parameters of routes in apps installed in subfolders ([#302](https://github.com/tighten/ziggy/pull/302))
- Ensure fallback routes are always last, thanks [@davejamesmiller](https://github.com/davejamesmiller)! ([#310](https://github.com/tighten/ziggy/pull/310))
- Allow getting the route name with `current()` when the current URL has a query string ([#330](https://github.com/tighten/ziggy/pull/330))

## [v0.9.4] - 2020-06-05

**Fixed**

- Fix escaping of `.` characters in the `current()` method, thanks [@davejamesmiller](https://github.com/davejamesmiller)! ([#296](https://github.com/tighten/ziggy/pull/296))

## [v0.9.3] - 2020-05-08

**Added**

- Add support for passing a CSP `nonce` attribute to the `@routes` Blade directive to be set on the script tag, thanks [@tminich](https://github.com/tminich)! (#287)

**Changed**

- Improve support for using Ziggy with server-side rendering, thanks [@emielmolenaar](https://github.com/emielmolenaar)! ([#260](https://github.com/tighten/ziggy/pull/260))
- Avoid resolving the Blade compiler unless necessary, thanks [@axlon](https://github.com/axlon)! ([#267](https://github.com/tighten/ziggy/pull/267))
- Use `dist/js/route.js` as the npm package's main target, thanks [@ankurk91](https://github.com/ankurk91) and [@benallfree](https://github.com/benallfree)! ([#276](https://github.com/tighten/ziggy/pull/276))
- Readme and quality-of-life improvements ([#289](https://github.com/tighten/ziggy/pull/289))

**Fixed**

- Ensure Ziggy's assets are always generated in the correct location ([#290](https://github.com/tighten/ziggy/pull/290))

---

For previous changes see the [Releases](https://github.com/tighten/ziggy/releases) page.

[Unreleased]: https://github.com/tighten/ziggy/compare/v2.4.2...HEAD
[v2.4.2]: https://github.com/tighten/ziggy/compare/v2.4.1...v2.4.2
[v2.4.1]: https://github.com/tighten/ziggy/compare/v2.4.0...v2.4.1
[v2.4.0]: https://github.com/tighten/ziggy/compare/v2.3.1...v2.4.0
[v2.3.1]: https://github.com/tighten/ziggy/compare/v2.3.0...v2.3.1
[v2.3.0]: https://github.com/tighten/ziggy/compare/v2.2.1...v2.3.0
[v2.2.1]: https://github.com/tighten/ziggy/compare/v2.2.0...v2.2.1
[v2.2.0]: https://github.com/tighten/ziggy/compare/v2.1.0...v2.2.0
[v2.1.0]: https://github.com/tighten/ziggy/compare/v2.0.5...v2.1.0
[v2.0.5]: https://github.com/tighten/ziggy/compare/v2.0.4...v2.0.5
[v2.0.4]: https://github.com/tighten/ziggy/compare/v2.0.3...v2.0.4
[v2.0.3]: https://github.com/tighten/ziggy/compare/v2.0.2...v2.0.3
[v2.0.2]: https://github.com/tighten/ziggy/compare/v2.0.1...v2.0.2
[v2.0.1]: https://github.com/tighten/ziggy/compare/v2.0.0...v2.0.1
[v2.0.0]: https://github.com/tighten/ziggy/compare/v1.8.2...v2.0.0
[v1.8.2]: https://github.com/tighten/ziggy/compare/v1.8.1...v1.8.2
[v1.8.1]: https://github.com/tighten/ziggy/compare/v1.8.0...v1.8.1
[v1.8.0]: https://github.com/tighten/ziggy/compare/v1.7.0...v1.8.0
[v1.7.0]: https://github.com/tighten/ziggy/compare/v1.6.2...v1.7.0
[v1.6.2]: https://github.com/tighten/ziggy/compare/v1.6.1...v1.6.2
[v1.6.1]: https://github.com/tighten/ziggy/compare/v1.6.0...v1.6.1
[v1.6.0]: https://github.com/tighten/ziggy/compare/v1.5.2...v1.6.0
[v1.5.2]: https://github.com/tighten/ziggy/compare/v1.5.1...v1.5.2
[v1.5.1]: https://github.com/tighten/ziggy/compare/v1.5.0...v1.5.1
[v1.5.0]: https://github.com/tighten/ziggy/compare/v1.4.6...v1.5.0
[v1.4.6]: https://github.com/tighten/ziggy/compare/v1.4.5...v1.4.6
[v1.4.5]: https://github.com/tighten/ziggy/compare/v1.4.4...v1.4.5
[v1.4.4]: https://github.com/tighten/ziggy/compare/v1.4.3...v1.4.4
[v1.4.3]: https://github.com/tighten/ziggy/compare/v1.4.2...v1.4.3
[v1.4.2]: https://github.com/tighten/ziggy/compare/v1.4.1...v1.4.2
[v1.4.1]: https://github.com/tighten/ziggy/compare/v1.4.0...v1.4.1
[v1.4.0]: https://github.com/tighten/ziggy/compare/v1.3.6...v1.4.0
[v1.3.6]: https://github.com/tighten/ziggy/compare/v1.3.5...v1.3.6
[v1.3.5]: https://github.com/tighten/ziggy/compare/v1.3.4...v1.3.5
[v1.3.4]: https://github.com/tighten/ziggy/compare/v1.3.3...v1.3.4
[v1.3.3]: https://github.com/tighten/ziggy/compare/v1.3.2...v1.3.3
[v1.3.2]: https://github.com/tighten/ziggy/compare/v1.3.1...v1.3.2
[v1.3.1]: https://github.com/tighten/ziggy/compare/v1.3.0...v1.3.1
[v1.3.0]: https://github.com/tighten/ziggy/compare/v1.2.0...v1.3.0
[v1.2.0]: https://github.com/tighten/ziggy/compare/v1.1.0...v1.2.0
[v1.1.0]: https://github.com/tighten/ziggy/compare/v1.0.5...v1.1.0
[v1.0.5]: https://github.com/tighten/ziggy/compare/v1.0.4...v1.0.5
[v1.0.4]: https://github.com/tighten/ziggy/compare/v1.0.3...v1.0.4
[v1.0.3]: https://github.com/tighten/ziggy/compare/v1.0.2...v1.0.3
[v1.0.2]: https://github.com/tighten/ziggy/compare/v1.0.1...v1.0.2
[v1.0.1]: https://github.com/tighten/ziggy/compare/v1.0.0...v1.0.1
[v1.0.0]: https://github.com/tighten/ziggy/compare/0.9.4...v1.0.0
[v0.9.4]: https://github.com/tighten/ziggy/compare/0.9.3...0.9.4
[v0.9.3]: https://github.com/tighten/ziggy/compare/v0.9.2...0.9.3
