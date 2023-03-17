<?php

namespace Illuminate\Foundation;

use Illuminate\Support\Collection;

/*
                                                   .~))>>
                                                  .~)>>
                                                .~))))>>>
                                              .~))>>             ___
                                            .~))>>)))>>      .-~))>>
                                          .~)))))>>       .-~))>>)>
                                        .~)))>>))))>>  .-~)>>)>
                    )                 .~))>>))))>>  .-~)))))>>)>
                 ( )@@*)             //)>))))))  .-~))))>>)>
               ).@(@@               //))>>))) .-~))>>)))))>>)>
             (( @.@).              //))))) .-~)>>)))))>>)>
           ))  )@@*.@@ )          //)>))) //))))))>>))))>>)>
        ((  ((@@@.@@             |/))))) //)))))>>)))>>)>
       )) @@*. )@@ )   (\_(\-\b  |))>)) //)))>>)))))))>>)>
     (( @@@(.@(@ .    _/`-`  ~|b |>))) //)>>)))))))>>)>
      )* @@@ )@*     (@)  (@) /\b|))) //))))))>>))))>>
    (( @. )@( @ .   _/  /    /  \b)) //))>>)))))>>>_._
     )@@ (@@*)@@.  (6///6)- / ^  \b)//))))))>>)))>>   ~~-.
  ( @jgs@@. @@@.*@_ VvvvvV//  ^  \b/)>>))))>>      _.     `bb
   ((@@ @@@*.(@@ . - | o |' \ (  ^   \b)))>>        .'       b`,
    ((@@).*@@ )@ )   \^^^/  ((   ^  ~)_        \  /           b `,
      (@@. (@@ ).     `-'   (((   ^    `\ \ \ \ \|             b  `.
        (*.@*              / ((((        \| | |  \       .       b `.
                          / / (((((  \    \ /  _.-~\     Y,      b  ;
                         / / / (((((( \    \.-~   _.`" _.-~`,    b  ;
                        /   /   `(((((()    )    (((((~      `,  b  ;
                      _/  _/      `"""/   /'                  ; b   ;
                  _.-~_.-~           /  /'                _.'~bb _.'
                ((((~~              / /'              _.'~bb.--~
                                   ((((          __.-~bb.-~
                                               .'  b .~~
                                               :bb ,'
                                               ~~~~
 */

class Inspiring
{
    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     *
     * May McGinnis always control the board. #LaraconUS2015
     *
     * RIP Charlie - Feb 6, 2018
     *
     * @return string
     */
    public static function quote()
    {
        return static::quotes()
            ->map(fn ($quote) => static::formatForConsole($quote))
            ->random();
    }

    /**
     * Get the collection of inspiring quotes.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function quotes()
    {
        return Collection::make([
            'Ah yes, sweet manmade horrors beyond our comprehension, my favourites -Anonymous',
        ]);
    }

    /**
     * Formats the given quote for a pretty console output.
     *
     * @param  string  $quote
     * @return string
     */
    protected static function formatForConsole($quote)
    {
        [$text, $author] = str($quote)->explode('-');

        return sprintf(
            "\n  <options=bold>“ %s ”</>\n  <fg=gray>— %s</>\n",
            trim($text),
            trim($author),
        );
    }
}
