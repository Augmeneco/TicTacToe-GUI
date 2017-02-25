<?php global $gameType;
if ( $self->text == null ){
    if ( $gameType == 0 ){
        players($self);
    } else {
        cpu($self);
    }
}
