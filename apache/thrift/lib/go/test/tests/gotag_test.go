/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements. See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership. The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

package tests

import (
	"reflect"
	"testing"

	"github.com/apache/thrift/lib/go/test/gopath/src/gotagtest"
)

func TestDefaultTag(t *testing.T) {
	s := gotagtest.Tagged{}
	st := reflect.TypeOf(s)
	field, ok := st.FieldByName("StringThing")
	if !ok || field.Tag.Get("json") != "string_thing" {
		t.Error("Unexpected default tag value")
	}
}

func TestCustomTag(t *testing.T) {
	s := gotagtest.Tagged{}
	st := reflect.TypeOf(s)
	field, ok := st.FieldByName("IntThing")
	if !ok {
		t.Error("Missing field IntThing")
		return
	}

	if v := field.Tag.Get("json"); v != "custom_thing" {
		t.Errorf("Expected custom_thing for tag json, got %s", v)
	}
	if v := field.Tag.Get("mykey"); v != "myvalue" {
		t.Errorf("Expected myvalue for tag mykey, got %s", v)
	}
}

func TestOptionalTag(t *testing.T) {
	s := gotagtest.Tagged{}
	st := reflect.TypeOf(s)
	field, ok := st.FieldByName("OptionalIntThing")
	if !ok || field.Tag.Get("json") != "optional_int_thing,omitempty" {
		t.Error("Unexpected default tag value for optional field")
	}
}

func TestOptionalTagWithDefaultValue(t *testing.T) {
	s := gotagtest.Tagged{}
	st := reflect.TypeOf(s)
	field, ok := st.FieldByName("OptionalBoolThing")
	if !ok || field.Tag.Get("json") != "optional_bool_thing" {
		t.Error("Unexpected default tag value for optional field that has a default value")
	}
}
